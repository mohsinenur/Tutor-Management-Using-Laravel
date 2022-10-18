<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TutionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TutionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TutionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    
    private $district = [
        'Dhaka' => 'Dhaka',
        'Manikganj' => 'Manikganj',
        'Tangail' => 'Tangail',
    ];
    private $area = [
        'Gulshan' => 'Gulshan',
        'Banani' => 'Banani',
        'Badda' => 'Badda',
        'Mirpur' => 'Mirpur',
    ];
    private $medium = [
        'English' => 'English',
        'Bangla' => 'Bangla',
    ];
    private $class = [
        'One' => 'One',
        'Two' => 'Two',
        'Three' => 'Three',
        'Four' => 'Four',
        'Five' => 'Five',
        'Six' => 'Six',
        'Seven' => 'Seven',
        'Eight' => 'Eight',
        'Nine' => 'Nine',
        'Ten' => 'Ten',
    ];
    private $subject = [
        'English' => 'English',
        'Bangla' => 'Bangla',
        'Math' => 'Math',
        'Chemistry' => 'Chemistry',
        'Physics' => 'Physics',
        'ICT' => 'ICT',
    ];
    private $days_per_week = [
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
    ];
    private $genders = [
        'Male' => 'Male',
        'Female' => 'Female',
        'Any Gender' => 'Any Gender',
    ];
    private $status = [
        'Available' => 'Available',
        'Unavailable' => 'Unavailable'
    ];

    
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
     
    public function setup()
    {
        CRUD::setModel(\App\Models\Tution::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tution');
        CRUD::setEntityNameStrings('tution', 'tutions');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('user_id');
        CRUD::column('full_name');
        CRUD::column('area');
        CRUD::column('district');
        CRUD::column('medium');
        CRUD::column('class');
        CRUD::column('student_school');
        CRUD::column('subject');
        CRUD::column('days_per_week');
        CRUD::column('student_gender');
        CRUD::column('address');
        CRUD::column('salary');
        CRUD::column('mobile');
        CRUD::column('email');
        CRUD::column('information');
        CRUD::column('tutor_gender');
        CRUD::column('status');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TutionRequest::class);

        CRUD::field('user_id');
        CRUD::field('full_name');
        CRUD::field('area')->type('select_from_array')->options($this->area);
        CRUD::field('district')->type('select_from_array')->options($this->district);
        CRUD::field('medium')->type('select_from_array')->options($this->medium);
        CRUD::field('class')->type('select_from_array')->options($this->class);
        CRUD::field('subject')->type('select_from_array')->options($this->subject);
        CRUD::field('student_school');
        CRUD::field('days_per_week')->type('select_from_array')->options($this->days_per_week);
        CRUD::field('address');
        CRUD::field('salary');
        CRUD::field('student_gender')->type('radio')->options($this->genders);
        CRUD::field('mobile');
        CRUD::field('email');
        CRUD::field('information');
        CRUD::field('tutor_gender')->type('radio')->options($this->genders);
        CRUD::field('status')->type('radio')->options($this->status);
        CRUD::field('teaching_style');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}