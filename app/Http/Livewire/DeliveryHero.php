<?php

namespace App\Http\Livewire;

use App\DeliveryMan;
use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class DeliveryHero extends Component
{

    use WithFileUploads;
    public $avatar;
    public $avatar_filtered;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $nid;
    public $address;
    public $father_name;
    public $father_phone;
    public $bio;
    public $reference_by;
    public $checkox;
    public $nid_image_filtered ;
    public $nid_image ;

    public function render()
    {
        return view('livewire.delivery-hero');
    }

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'required|image|max:1024|dimensions:max_width=1000,max_height=1000'
        ]);
        $this->avatar_filtered = $this->avatar;
    }
    public function updatedNidImage()
    {
        $this->validate([
            'nid_image' => 'required|image|max:2048|dimensions:max_width=5000,max_height=3000'
        ]);
        $this->nid_image_filtered = $this->nid_image;
    }


    public function save()
    {

        $this->validate([
            'avatar' => 'required|image|max:1024|dimensions:max_width=1000,max_height=1000',
            'nid_image' => 'required|image|max:2048|dimensions:max_width=5000,max_height=3000',
            'firstname' => 'required|max:20|min:2',
            'lastname' => 'required|max:20|min:2',
            'email' => 'required|email',
            'phone' => 'required|max:11|min:11',
            'nid' => 'required|integer|min:11',
            'address' => 'required|max:100',
            'father_name' => 'required|max:20|min:2',
            'father_phone' => 'required|max:11|min:11',
            'bio' => 'required|max:400|min:50',
            'reference_by' => 'nullable|max:20|min:2',
            'checkox' => 'required',
        ]);

        $avatar = $this->avatar->store('avatars');
        $nid_image = $this->nid_image->store('nid_images');

        DeliveryMan::create([
            'avatar' => $avatar,
            'nid_image' => $nid_image,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'nid' => $this->nid,
            'address' => $this->address,
            'father_name' => $this->father_name,
            'father_phone' => $this->father_phone,
            'reference_by' => $this->reference_by ?? null,
            'bio' => $this->bio,
            'ip' =>  request()->ip(),
        ]);

        session()->flash('success', 'Your Data successfully Saved.');

        return redirect()->to(route('home'));
    }

}
