<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake Twitter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <br><br>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tweets as $tweet)
                <tr>
                  <td>{{$tweet->id}}</td>
                  <td>{{$tweet->author}}</td>
                  <td>{{$tweet->content}}</td>
                  <td>{{$tweet->created_at}}</td>
                  <td>{{$tweet->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>
