@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cloud Service Application</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<h2>Cloud Project Hosting a website</h2>
Group members Name:</br>
Muhammad Usman Zafar</br>
Maham Ammar</br>
Sheeza Shakeel</br>
Uroosa Ashfaque    </br>            </div>
            </div>
        </div>
    </div>
</div>
@endsection
