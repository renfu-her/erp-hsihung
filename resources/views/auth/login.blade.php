<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">登入</div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="id" class="form-label">帳號</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                            </div>
                            <div class="mb-3">
                                <label for="pw" class="form-label">密碼</label>
                                <input type="password" class="form-control" id="pw" name="pw" required>
                            </div>
                            <button type="submit" class="btn btn-primary">登入</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 