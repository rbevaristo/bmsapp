<?php

use App\Task;
use App\User;
use App\Client;
use App\Address;
use App\Profile;
use App\Project;
use App\Employee;
use App\Position;
use App\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $client = new Client;
        $client->slug = 'client-1';
        $client->name = 'Client 1';
        $client->email = 'client1@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->user_id = 1;
        $client->save();
        $client = new Client;
        $client->slug = 'client-2';
        $client->name = 'Client 2';
        $client->email = 'client2@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->user_id = 1;
        $client->save();
        $client = new Client;
        $client->slug = 'client-3';
        $client->name = 'Client 3';
        $client->email = 'client3@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->user_id = 1;
        $client->save();
        $client = new Client;
        $client->slug = 'client-4';
        $client->name = 'Client 4';
        $client->email = 'client4@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->user_id = 1;
        $client->save();
        $client = new Client;
        $client->slug = 'client-5';
        $client->name = 'Client 5';
        $client->email = 'client5@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->user_id = 1;
        $client->save();

        $project = new Project;
        $project->title = 'Project 1';
        $project->slug = 'project-1';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2018-12-15 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2018-12-20 00:00:00"));
        $project->completed_date = date("Y-m-d H:i:s", strtotime("2018-12-25 00:00:00"));
        $project->price = 10000;
        $project->status = 1;
        $project->client_id = 1;
        $project->save();
        $project = new Project;
        $project->title = 'Project 2';
        $project->slug = 'project-2';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2019-01-05 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2019-01-15 00:00:00"));
        $project->price = 10000;
        $project->client_id = 2;
        $project->save();
        $project = new Project;
        $project->title = 'Project 3';
        $project->slug = 'project-3';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $project->price = 10000;
        $project->client_id = 3;
        $project->save();

        $task = new Task;
        $task->slug = 'task-1';
        $task->title = 'Task 1';
        $task->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $task->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $task->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $task->project_id = 1;
        $task->save();
        $task = new Task;
        $task->slug = 'task-2';
        $task->title = 'Task 2';
        $task->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $task->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $task->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $task->project_id = 1;
        $task->save();
        $task = new Task;
        $task->slug = 'task-3';
        $task->title = 'Task 3';
        $task->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $task->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $task->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $task->project_id = 1;
        $task->save();
        $task = new Task;
        $task->slug = 'task-4';
        $task->title = 'Task 4';
        $task->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $task->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $task->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $task->project_id = 2;
        $task->save();
        $task = new Task;
        $task->slug = 'task-5';
        $task->title = 'Task 5';
        $task->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $task->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $task->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $task->project_id = 3;
        $task->save();


        $dept = new Department;
        $dept->slug = 'admininistration';
        $dept->name = 'Administration';
        $dept->user_id = 1;
        $dept->save();

        $position = new Position;
        $position->slug = 'manager';
        $position->name = 'Manager';
        $position->dept_id = 1;
        $position->save();
        $position = new Position;
        $position->slug = 'account-officer';
        $position->name = 'Accounting Officer';
        $position->dept_id = 1;
        $position->save();
        $position = new Position;
        $position->slug = 'accounting-manager';
        $position->name = 'Accounting Manager';
        $position->dept_id = 1;
        $position->save();
        $position = new Position;
        $position->slug = 'marketing-manager';
        $position->name = 'Marketing Manager';
        $position->dept_id = 1;
        $position->save();
        $position = new Position;
        $position->slug = 'it-officer';
        $position->name = 'IT Officer';
        $position->dept_id = 1;
        $position->save();

        $employee = new Employee;
        $employee->employee_id = '12345';
        $employee->firstname = 'Employee';
        $employee->lastname = 'One';
        $employee->position_id = 1;
        $employee->save();
        $employee = new Employee;
        $employee->employee_id = '123456';
        $employee->firstname = 'Employee';
        $employee->lastname = 'Two';
        $employee->position_id = 2;
        $employee->save();
        $employee = new Employee;
        $employee->employee_id = '123457';
        $employee->firstname = 'Employee';
        $employee->lastname = 'Three';
        $employee->position_id = 3;
        $employee->save();
        $employee = new Employee;
        $employee->employee_id = '123458';
        $employee->firstname = 'Employee';
        $employee->lastname = 'Four';
        $employee->position_id = 4;
        $employee->save();
        $employee = new Employee;
        $employee->employee_id = '123459';
        $employee->firstname = 'Employee';
        $employee->lastname = 'Five';
        $employee->position_id = 5;
        $employee->save();
    }
}
