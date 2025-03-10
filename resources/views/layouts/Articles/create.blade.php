@extends('layouts.app')

@section('content')

<div>
    <a href='{{route('Articles.create')}}'>creer un article </a>
  <form action="">
    <label for="">description</label>
    <input type="textarea" name="description">
    <label for="">categorie</label>
    <select name="categorie_id" id="categorie_id">
        @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
    </select>
  </form>

@endsection