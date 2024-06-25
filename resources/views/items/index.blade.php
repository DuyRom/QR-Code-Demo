
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>DEMO QR CODE</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Vật tư</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
      <tr>
        <td>  <a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></td>
        <td> <a href="{{ route('items.qrcode', $item->id) }}">Tạo mã QR</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
