<x-app-layout>
    <div class="content-wrapper">        
        {{-- {{$data}} --}}
        <div class="container col-sm-4 ml-auto mr-auro mt-5 border p-3 rounded-end bg-gray-500">
        <h1>edit</h1>
        <form action="/edit" method="POST">
           @csrf
           <input type="hidden" name="id" value={{$data->id}}>
           <div class="mb-3">
           <input type="text" name="name" class="form-control"  value="{{$data->name}}">
           </div>

           <div class="mb-3">
           <input type="email" name="email" class="form-control"  value="{{$data->email}}">
           </div>

           <div class="mb-3">
           <input type="password" class="form-control" name="password" value="{{$data->password}}">
           </div>

           <div class="mb-3">
            <input type="submit" value="Edit/update" class="btn btn-primary float-end">
           </div>
        </form>
      </div>
    </div>
</x-app-layout>