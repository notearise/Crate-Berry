<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Crateberry - Upload</title>

  </head>

  <body>

    <div>
      <h1>Crateberry</h1>
      <h2>Upload</h2>
    </div>

    <hr />

    <div>
      <span>
        Upload your MP3 file here.
      </span>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Upload Here:</legend>
          <input type="file" name="pic" />
          <button type="submit" name="btn-upload">Upload</button>
        </fieldset>
      </form>
    </div>

  </body>

</html>
