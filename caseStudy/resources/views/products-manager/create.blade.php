<!doctype html>
<html lang="en">
<head>
    <title>{{__('language.Add new Product')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('language.Add new Product') }}</div>
                <div class="text-center language">
                    <a class="change-language" href="{{route('view.change-language',['en'])}}">{{__('language.English')}}</a>
                    <span>|</span>
                    <a class="change-language" href="{{route('view.change-language',['vi'])}}">{{__('language.Vietnam')}}</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.create') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('language.Name') }}</label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('language.Price') }}</label>
                            <div class="">
                                <input type="text" class="form-control" name="price" >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('language.Category') }}</label>
                            <div class="">
                                <input type="text" class="form-control" name="category">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="">
                            <label class="form-label">{{ __('language.Description') }}</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('language.Image') }}</label>
                            <div class="">
                                <input type="text" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="mb-3 mb-0">
                            <div class=" offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('language.Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
