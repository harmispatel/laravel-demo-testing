<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>category</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>
    <center>
        <table border="2">
            <form action="category" method="POST" enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>
                        <div>
                            <label><strong>Category Name</strong></label><br>
                            <input type="category" class="form-control" name="category">
                            @error('category')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label><strong>Select the day :</strong></label><br>
                            <label><input type="checkbox" name="day[]" value="mon" > mon</label>
                            <label><input type="checkbox" name="day[]" value="tue">tue</label>
                            <label><input type="checkbox" name="day[]" value="wed"> wed</label>
                            <label><input type="checkbox" name="day[]" value="thu"> thu</label>
                            <label><input type="checkbox" name="day[]" value="fri"> fri</label>
                            <label><input type="checkbox" name="day[]" value="sat"> sat</label>
                            <label><input type="checkbox" name="day[]" value="sun"> sun</label>
                            @error('day')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                           @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label><strong>Description </strong></label><br>
                            <textarea class="form-control" id="summernote" 
                                name="description"></textarea>
                                @error('description')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label><strong>Image</strong></label><br>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label><strong>Banner Images </strong></label><br>
                            <input type="file" name="images" class="form-control">
                            @error('images')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label><strong>Sort Order</strong></label><br>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </td>
                </tr>
               
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-primary" name="submit" value="Save">
                            <button type="reset" class="btn btn-danger" value="Reset">cancel</button>
                        </td>
                    </tr>
            </form>
        </table>
    </center>
    <script>
        $('#summernote').summernote();
    </script>
</body>

</html>
