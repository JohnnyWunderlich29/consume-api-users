<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Livewire\Component;

class UsersApi extends Component
{
    public $users;

    public function mount()
    {
        $this->dummyAPI();
    }

    public function dummyAPI()
    {
        $client = new Client();

        $response = $client->get('https://dummyapi.io/data/v1/user?limit=10', [
            'headers' => [
                'app-id' => '651e17b3cc00f8af52684385',
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $this->users = json_decode($response->getBody(), true);

    }

    public function render()
    {
        return view('livewire.users-api');
    }
}
