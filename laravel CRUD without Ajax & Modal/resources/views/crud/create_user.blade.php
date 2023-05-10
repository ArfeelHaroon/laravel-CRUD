<x-app-layout>

    <div class="content-wrapper">
        <div class="container col-sm-4 m-auto border p-3 rounded-end">
                <h1>add user</h1>
            <form action="" method="POST" class="form">
                    @csrf
                <div class="mb-3">
                    <input type="text" name="name" placeholder="name" class="form-control"/>
                </div>

                <div class="mb-3">
                    <input type="text" name="email" placeholder="email" class="form-control"/>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control"/>
                </div>  

                    <button type="submit" class="btn btn-success">Create</button>
                
            </form>
        </div>
        <table>
            @foreach ($id as $myid)
            <tr>
             <td>myid is {{$myid}}</td>
            </tr>
              
            @endforeach
        </table>
    </div>
</x-app-layout>
