<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <base href="{{ asset('backend') }}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="POST">
                        @csrf
						<fieldset>
							<div class="form-group">
                                <input class="form-control" placeholder="username" name="username" type="text" autofocus="" value="{{ old('username') }}">
                                @error ('username')
									<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
								@error ('password')
									<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>