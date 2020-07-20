<table class="table" style="width: 100%">
    <thead style="width: 100%">
        <tr style="width: 100%;border:1px solid #888">
            <th>ID</th>
            <th>Avatar</th>
            <th>F Name</th>
            <th>L Name</th>
            <th>Email</th>
            <th>F name</th>
            <th>F phone</th>
            <th>NID</th>
            <th>Pic</th>
            <th>Address</th>
            <th>IP</th>
        </tr>
    </thead>
    <tbody>

        @forelse($heros as $hero)

            <tr style="border:1px solid #888">
                <td scope="row">{{$hero->id}}</td>
                <td><img style="width: 100px" src="{{asset(Storage::url($hero->avatar))}}" alt=""></td>
                <td>{{$hero->firstname}}</td>
                <td>{{$hero->lastname}}</td>
                <td>{{$hero->email}}</td>
                <td>{{$hero->father_name}}</td>
                <td>{{$hero->father_phone}}</td>
                <td>{{$hero->nid}}</td>
                <td><img style="width: 300px" src="{{Storage::url($hero->nid_image)}}" alt=""></td>
                <td>{{$hero->address}}</td>
                <td>{{$hero->login_ip}}</td>
            </tr>

        @empty
            <h2>No Data</h2>
        @endforelse

    </tbody>
</table>
