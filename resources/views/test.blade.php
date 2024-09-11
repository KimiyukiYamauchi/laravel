@foreach($users as $user)
  <p>
    {{$user->name}}、{{$user->email}}、{{$user->password}}
  </p>
@endforeach