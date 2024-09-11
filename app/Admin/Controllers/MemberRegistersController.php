<?php

namespace App\Admin\Controllers;

use App\Models\Membership\Register;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
Use Encore\Admin\Widgets\Table;

class MemberRegistersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Individual Members Registers';

    protected $last_name;
    protected $first_name;

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Register());
        $grid->model()->where('form_type','personal');

        // $grid->column('id', __('Id'));
        $grid->column('hospital_logo', __('Image'))->display(function ($picture) {
            if ($picture) {
                return "<img src='{$picture}' style='max-width:100px; max-height:100px;'/>";
            } else {
                $name = $this->first_name . ' ' . $this->last_name;
                return "<img src='https://ui-avatars.com/api/?background=random&name={$name}' style='max-width:100px; max-height:100px;'/>";
            }
        });


        $grid->column('full_name', __('Name'))->display(function () {
            return $this->title . ' ' . $this->first_name . ' ' . $this->last_name;
        })->modal(function ($model) {
            $comments = $model->getLatestMembershipDetail()->take(10)->get()->map(function ($comment) {
                return $comment->only(['id', 's_date', 'e_date', 'price', 'currency_code', 'payment_mode', 'order_status', 'status_message', 'tracking_id', 'created_at', 'updated_at']);
            });
            return new Table(['ID', 'Start Date', 'End Date', 'Price', 'currency_code', 'Payment Mode', 'Order Status', 'Status Message', 'Tracking Id', 'Created At', 'Updated At'], $comments->toArray());
        });

        $grid->column('membership_number', __('Membership number'));

        $grid->column('email')->display(function ($email) {
            return "<span style='color:blue'>$email</span>";
        })->copyable()->sortable();

        $grid->column('organization_name', __('Organization name'));

        $grid->column('membershipCategoryget.mname', __('Membership category id'));

        $grid->column('pan_no', __('Pan no'));
        $grid->column('role', __('Role'));
        $grid->column('specialization', __('Specialization'));
        // $grid->column('area_of_interest', __('Area of interest'))->width(500)->limit(30);
        $grid->column('profession', __('Profession'));

        $grid->column('personal_mobile', __('Personal mobile'));
        // $grid->column('educational_qualification', __('Educational qualification'));
        // $grid->column('other_educational_qualification', __('Other educational qualification'));
        // $grid->column('personal_designation', __('Personal designation'));
        // $grid->column('working_organization', __('Working organization'));
        // $grid->column('quality_implementer', __('Quality implementer'));
        // $grid->column('testimonial', __('Testimonial'))->width(500)->limit(30);
        $grid->column('status', __('Status'))->switch()->sortable();

        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableDelete();
        });


        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('profession', 'Profession');
            $filter->like('email', 'Email');
            $filter->like('role', 'Role');
            $filter->select('status', 'Status')->options(['1' => 'Active', '0' => 'Inactive']);
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Register::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('hospital_type', __('Hospital type'));
        $show->field('form_type', __('Form type'));
        $show->field('parent_hospital_name', __('Parent hospital name'));
        $show->field('no_of_hospital_in_parent', __('No of hospital in parent'));
        $show->field('organization_name', __('Organization name'));
        $show->field('hospital_category_id', __('Hospital category id'));
        $show->field('membership_category_id', __('Membership category id'));
        $show->field('hospital_email', __('Hospital email'));
        $show->field('membership_number', __('Membership number'));
        $show->field('numbers_of_beds_in_hospital', __('Numbers of beds in hospital'));
        $show->field('hospital_address', __('Hospital address'));
        $show->field('pan_no', __('Pan no'));
        $show->field('gst_registration_number', __('Gst registration number'));
        $show->field('hospital_mobile', __('Hospital mobile'));
        $show->field('hospital_social', __('Hospital social'));
        $show->field('hospital_logo', __('Hospital logo'));
        $show->field('accreditation_category', __('Accreditation category'));
        $show->field('tier_classification', __('Tier classification'));
        $show->field('hospital_location', __('Hospital location'));
        $show->field('core_services_hospital', __('Core services hospital'));
        $show->field('support_services_hospital', __('Support services hospital'));
        $show->field('diagnostic_centre', __('Diagnostic centre'));
        $show->field('role', __('Role'));
        $show->field('specialization', __('Specialization'));
        $show->field('area_of_interest', __('Area of interest'));
        $show->field('organization_head', __('Organization head'));
        $show->field('contact_person_representing_organization_one', __('Contact person representing organization one'));
        $show->field('contact_person_representing_organization_two', __('Contact person representing organization two'));
        $show->field('profession', __('Profession'));
        $show->field('title', __('Title'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email', __('Email'));
        $show->field('personal_mobile', __('Personal mobile'));
        $show->field('educational_qualification', __('Educational qualification'));
        $show->field('other_educational_qualification', __('Other educational qualification'));
        $show->field('personal_designation', __('Personal designation'));
        $show->field('working_organization', __('Working organization'));
        $show->field('quality_implementer', __('Quality implementer'));
        $show->field('testimonial', __('Testimonial'));
        $show->field('personal_address', __('Personal address'));
        $show->field('personal_social', __('Personal social'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Register());

        // $form->number('user_id', __('User id'));
        $form->text('hospital_type', __('Hospital type'));
        $form->text('organization_name', __('Organization name'));
        $form->text('membership_category_id', __('Membership category id'));
        $form->text('membership_number', __('Membership number'));
        $form->text('pan_no', __('Pan no'));
        $form->text('hospital_logo', __('Hospital logo'));
        $form->text('accreditation_category', __('Accreditation category'));
        $form->text('tier_classification', __('Tier classification'));
        $form->text('hospital_location', __('Hospital location'));
        $form->textarea('core_services_hospital', __('Core services hospital'));
        $form->textarea('support_services_hospital', __('Support services hospital'));
        $form->text('diagnostic_centre', __('Diagnostic centre'));
        $form->text('role', __('Role'));
        $form->textarea('specialization', __('Specialization'));
        $form->textarea('area_of_interest', __('Area of interest'));
        $form->text('profession', __('Profession'));
        $form->text('title', __('Title'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->email('email', __('Email'));
        $form->text('personal_mobile', __('Personal mobile'));
        $form->text('educational_qualification', __('Educational qualification'));
        $form->text('other_educational_qualification', __('Other educational qualification'));
        $form->text('personal_designation', __('Personal designation'));
        $form->text('working_organization', __('Working organization'));
        $form->text('quality_implementer', __('Quality implementer'));
        $form->textarea('testimonial', __('Testimonial'));

        $form->embeds('personal_address', 'Address', function ($form) {
            $form->text('city');
            $form->text('state');
            $form->text('pin_code');
            $form->text('street_address');
        });

        $form->embeds('personal_social', 'Social Network', function ($form) {
            $form->text('personal_twitter_link');
            $form->text('personal_LinkedIn_link');
            $form->text('personal_facebook_link');
            $form->text('personal_instagram_link');
        });

        $form->switch('status', __('Status'));

        return $form;
    }
}
