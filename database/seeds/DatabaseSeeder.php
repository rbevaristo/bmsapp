<?php

use App\User;
use App\Client;
use App\Address;
use App\Profile;
use App\Project;
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
        $user = new User;
        $user->firstname = 'John';
        $user->lastname = 'Doe';
        $user->username = 'jdoe';
        $user->email = 'jdoe@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User;
        $user->firstname = 'Jane';
        $user->lastname = 'Smith';
        $user->username = 'jsmith';
        $user->email = 'jsmith@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $client = new Client;
        $client->name = 'Client 1';
        $client->email = 'client1@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->save();
        $client = new Client;
        $client->name = 'Client 2';
        $client->email = 'client2@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->save();
        $client = new Client;
        $client->name = 'Client 3';
        $client->email = 'client3@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->save();
        $client = new Client;
        $client->name = 'Client 4';
        $client->email = 'client4@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->save();
        $client = new Client;
        $client->name = 'Client 5';
        $client->email = 'client5@gmail.com';
        $client->contact = '09131313131';
        $client->logo = '';
        $client->save();

        $project = new Project;
        $project->title = 'Project 1';
        $project->slug = 'project-1';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2018-12-15 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2018-12-20 00:00:00"));
        $project->completed_date = date("Y-m-d H:i:s", strtotime("2018-12-25 00:00:00"));
        $project->status = 1;
        $project->save();
        $project = new Project;
        $project->title = 'Project 2';
        $project->slug = 'project-2';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2019-01-05 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2019-01-15 00:00:00"));
        $project->save();
        $project = new Project;
        $project->title = 'Project 3';
        $project->slug = 'project-3';
        $project->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
        $project->participants = '["1","2","3"]';
        $project->start_date = date("Y-m-d H:i:s", strtotime("2019-03-05 00:00:00"));
        $project->due_date = date("Y-m-d H:i:s", strtotime("2019-03-25 00:00:00"));
        $project->save();

        $profile = new Profile;
        $profile->birthdate = date("Y-m-d", strtotime('2000-01-30'));
        $profile->gender = 1;
        $profile->contact = '012346579';
        $profile->save();
        $profile = new Profile;
        $profile->birthdate = date("Y-m-d", strtotime('2004-02-29'));
        $profile->gender = 0;
        $profile->contact = '012346579';
        $profile->save();

        $address = new Address;
        $address->houseNumber = '1';
        $address->street = 'Street 1';
        $address->barangay = 'Barangay 1';
        $address->city = 'City 1';
        $address->postalCode = '2001';
        $address->save();
        $address = new Address;
        $address->houseNumber = '2';
        $address->street = 'Street 2';
        $address->barangay = 'Barangay 2';
        $address->city = 'City 2';
        $address->postalCode = '2002';
        $address->save();
        $address = new Address;
        $address->houseNumber = '3';
        $address->street = 'Street 3';
        $address->barangay = 'Barangay 3';
        $address->city = 'City 3';
        $address->postalCode = '2003';
        $address->save();
    }
}
