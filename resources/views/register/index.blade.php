@extends('cover.template')

@section('content')
    <div class="container is-fluid ">                
      <section class="section">
        <div class="container has-text-centered">
          <div class="columns is-centered">
            <div class="column is-5 is-4-desktop">
              
            {!! Form::open(['route' => 'register.store', 'role' => 'form']) !!}

                @php
                if ($errors->has('username')) {
                    $class = 'input is-invalid'; $message = $errors->first('username'); $style = 'font-weight: bold; color: red;';
                } else {
                    $class = 'input'; $message =  ''; $style =  'font-weight: bold; color: white;';
                }
                @endphp
                <div class="field">
                  <div class="control">                    
                    <label for="username" data-toggle="tooltip" title="{{$message}}" style="{{$style}}">Username/ e-Mail</label>
                    <div data-toggle="tooltip" title="{{$message}}" class="col-md-6">
                        {!! Form::text('username',null,['class'=> $class,'placeholder'=>'Isikan E-mail', 'id' => 'username']) !!}
                    </div>
                  </div>
                </div>

                @php
                if ($errors->has('password')) {
                    $class = 'input is-invalid'; $message = $errors->first('password'); $style = 'font-weight: bold; color: red;';
                } else {
                    $class = 'input'; $message =  ''; $style =  'font-weight: bold; color: white;';
                }
                @endphp
                <div class="field">
                  <div class="control">                    
                    <label for="password" data-toggle="tooltip" title="{{$message}}" style="{{$style}}">Password</label>
                    <div data-toggle="tooltip" title="{{$message}}" class="col-md-6">
                        {!! Form::password('password',['class'=> 'input','placeholder'=>'Isikan Password', 'id' => 'password']) !!}                        
                    </div>
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control is-expanded">
                    <button class="button is-success is-fullwidth">Proses Daftar</button>
                  </div>
                </div>

              {!! Form::close() !!}
            
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection