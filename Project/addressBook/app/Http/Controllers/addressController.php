<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddressBook;

class addressController extends Controller
{
    public function home() {
      $addressBook = AddressBook::all(); // Getting all the records from the address book table. Static function which means an instance of the method is not required
      return view('home', ['addressBook' => $addressBook]); // This returns the addressBook variable as 'addressBook' in the view home html page
    }

    public function add(Request $request) {

      $this->validate($request, [

        'firstName' => 'required',
        'lastName' => 'required',
        'teleNumber' => 'required', // looks at the name tag from html
        'email' => 'required'
      ]);


      $addressBook = new AddressBook();

      $addressBook->firstName = $request->input('firstName'); // $request uses the class Request which conatins a method input to post data to the database
      $addressBook->lastName = $request->input('lastName');
      $addressBook->telephoneNumber = $request->input('teleNumber');
      $addressBook->email = $request->input('email');

      $addressBook->save();
      return redirect('/')->with('info', 'Contact Saved Succesfully!'); // with is a session we are creating, calling it info which will be displayed in the home(/) page
    }

    public function update($id) {

      $addressBook = AddressBook::find($id); // Getting all the records from the address book table. Static function which means an instance of the method is not required
      return view('update', ['addressBook' => $addressBook]);

    }


    public function edit(Request $request, $id) {

      $this->validate($request, [

        'firstName' => 'required',
        'lastName' => 'required',
        'teleNumber' => 'required', // looks at the name tag from html
        'email' => 'required'
      ]);

      $data = array(

        'firstName' => $request->input('firstName'), // 'firstName' is from the database table, and request is the name the user puts in
        'lastName' => $request->input('lastName'),
        'telephoneNumber' => $request->input('teleNumber'),
        'email' => $request->input('email')

      );

      AddressBook::where('id', $id)->update($data);
      return redirect('/')->with('info', 'Contact Updated Successfully!');

    }

    public function read($id) {

      $addressBook = AddressBook::find($id); // Getting all the records from the address book table. Static function which means an instance of the method is not required
      return view('read', ['addressBook' => $addressBook]);

    }

    public function delete($id) {

      AddressBook::where('id', $id)->delete(); // Getting all the records from the address book table. Static function which means an instance of the method is not required
      return redirect('/')->with('info', 'Contact Deleted Successfully!');

    }
}
