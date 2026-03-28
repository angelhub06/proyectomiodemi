@if ($message = Session::get('success'))
    <div> style="padding: 15px;background-color:green; color: white;"
        <p>{{$message}}</p>

    </div>

        <div> style="padding: 15px;background-color:red; color: white;"
        <p>{{$message}}</p>

    </div>