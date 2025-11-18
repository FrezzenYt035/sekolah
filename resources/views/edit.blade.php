<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Content</title>
</head>
<body style="background-color: #0f0d1f; color: white; font-family: sans-serif;">

  <div style="width: 80%; margin: 50px auto;">
    <h1>Edit Content</h1>

    @if ($errors->any())
      <div style="color: red;">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <label for="nama">Nama</label><br>
      <input type="text" name="nama" id="nama" value="{{ $product->nama }}" 
             style="width: 100%; padding: 10px; border-radius: 8px; margin-bottom: 15px;"><br>

      <label for="deskripsi">Deskripsi</label><br>
      <textarea name="deskripsi" id="deskripsi" rows="5"
                style="width: 100%; padding: 10px; border-radius: 8px; margin-bottom: 15px;">{{ $product->deskripsi }}</textarea><br>

      <label for="gambar">Gambar (opsional)</label><br>
      @if($product->gambar)
        <img src="{{ asset('uploads/' . $product->gambar) }}" alt="Current Image" width="200" style="margin-bottom:10px;"><br>
      @endif
      <input type="file" name="gambar" id="gambar"><br><br>

      <button type="submit" 
              style="background-color: #2563eb; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer;">
        Update
      </button>
    </form>
  </div>

</body>
</html>
