@extends('layouts.main-layout')

@section('content')
    
    <form action=" {{route('postcard.store')}}" 
        method="POST"
        enctype="multipart/form-data">
        {{-- enctype="multipart/form-data" dichiara di passare non solo stringhe o numeri ma anche file --}}
        
        @method('POST')
        @csrf

        <label for="sender">Sender</label><br>
        <input type="text" name="sender"><br>    
        <label for="address">Address</label><br>
        <input type="text" name="address"><br>
        <label for="text">Text</label><br>
        <input type="text" name="text"><br>    
        <label for="image">Image</label><br>
        <input type="file" name="image" ><br>
        <br>
        <input type="submit" value="create">
    
    
    </form>



@endsection