<!DOCTYPE html>
<html>
<head>
	<title>라라벨 Todo list 만들기</title>
</head>
<body>
<form method="post" action="/todo">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>할일</label>
	<input type="text" name="title">
	<input type="submit">
</form>
@foreach($todos as $todo)
	<p>
		@if($todo->done == 1)
			<span style="text-decoration: line-through">
		@endif
		{{ $todo['title'] }}
		@if($todo->done == 1)
			</span>
		@endif
		<form method="post" action="/todo/done/{{ $todo->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="<?php echo $todo->done == 1 ? "취소" : "완료"?>">
		</form>

		<form method="post" action="/todo/{{ $todo->id }}">
			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="삭제">
		</form>
	</p>
@endforeach
</body>
</html>