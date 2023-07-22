@extends('apps.backapp')
@section('title', 'Update career')
@section('pageTitle', 'edit career')

@section('extraCss')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('main')
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Update career page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('career.update', $career->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">career Name:</label>
                    <input type="text" class="form-control" name="topic" id="inputName"
                        placeholder="Input career Name here" value="{{ $career->topic }}">
                    @error('topic')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="col-12">
                    <label for="inputDetails">Description:</label>
                    <textarea name="description" id="inputDetails">{{ $career->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputDate">career Date:</label>
                    <input type="date" class="form-control" name="date" id="inputDate"
                        placeholder="Input career Date here" value="{{ $career->date }}">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputTime">career Time:</label>
                    <input type="time" class="form-control" name="time" id="inputTime"
                        placeholder="Input career Time here" value="{{ $career->time }}">
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Update career</button>
            </form>
        </div>
    </div>
@endsection
@section('extraScripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#inputDetails').summernote({
                placeholder: 'Describe Job Description here',
                height: 220
            });
        });
    </script>
@endsection
