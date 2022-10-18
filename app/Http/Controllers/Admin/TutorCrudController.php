<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TutorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TutorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TutorCrudController extends CrudController
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

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Tutor::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tutor');
        CRUD::setEntityNameStrings('tutor', 'tutors');
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
        CRUD::column('area');
        CRUD::column('district');
        CRUD::column('medium');
        CRUD::column('class');
        CRUD::column('subject');
        CRUD::column('days_per_week');
        CRUD::column('address');
        CRUD::column('salary');
        CRUD::column('information');
        CRUD::column('user_id');
        CRUD::column('qualification');
        CRUD::column('teaching_style');
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
        CRUD::setValidation(TutorRequest::class);

        CRUD::field('user_id');
        CRUD::field('area')->type('select_from_array')->options($this->area);
        CRUD::field('disctrict')->type('select_from_array')->options($this->district);
        CRUD::field('medium')->type('select_from_array')->options($this->medium);
        CRUD::field('class')->type('select_from_array')->options($this->class);
        CRUD::field('subject')->type('select_from_array')->options($this->subject);
        CRUD::field('days_per_week')->type('select_from_array')->options($this->days_per_week);
        CRUD::field('address');
        CRUD::field('salary');
        CRUD::field('information');
        CRUD::field('qualification');
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