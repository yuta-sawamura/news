@if(isset($add))
<form action="/admin/store" method="post">
@else
<form action="/admin/update/<?= $news->id ?>" method="post">
@endif
  @csrf
  <div class="form-group col-xl-4 col-md-12 col-sm-12 col-12">
    <label>タイトル<span class="text-danger">*</span></label>
    <input type="text" name="title" value="{{ $errors->has('*') ? old('title'):($news->title ?? '') }}"
      class="form-control @error('title') is-invalid @enderror" required>
    @include('components.validations.feedback', ['message' => 'title'])

  </div>
  <div class="form-group col-xl-10 col-md-12 col-sm-12 col-12">
    <label>本文<span class="text-danger">*</span></label>
    <textarea name="content"
      id="news-content">{{ $errors->has('*') ? old('content'):($news->content ?? '') }}</textarea>
    @include('components.validations.feedback', ['message' => 'content'])
  </div>
  <div class="col-xl-10 col-md-12 col-sm-12 col-12 text-right">
    @isset ($isEdit)
    <a class="btn btn-danger mb-2 mt-5" href="{{ url('admin/delete', $news) }}"
      onclick="return confirm('本当によろしいですか？')" role="button">削除</a>
    @endisset
    <button type="submit" class="btn btn-primary mb-2 mt-5">保存</button>
  </div>
</form>