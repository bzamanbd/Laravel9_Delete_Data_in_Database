<center>
 <h2>List of Members</h2>
 <table border="1">
  <tr>
   <th>ID</th>
   <th>NAME</th>
   <th>EMAIL</th>
   <th>ACTION</th>
  </tr>
 @foreach ($collection as $item)
 <tr>
  <td>{{ $item->id }}</td>
  <td>{{ $item->name }}</td>
  <td>{{ $item->email }}</td>
  <td><a href={{ 'delete/'.$item->id }}>Delete</a></td>
 </tr>

 @endforeach
 </table>
</center>