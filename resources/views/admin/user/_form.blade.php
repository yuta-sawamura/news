<div class="row">
  <div class="col-lg-11 mx-auto">
    <div class="row">
      <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
        <div class="form">
          <div class="row">
            <div class="col-md-6" id="email">
              <div class="form-group">
                <label for="">メールアドレス<span class="text-danger">*</span></label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                  placeholder="yamada@gmail.com" value="{{ $errors->has('*') ? old('email'):($user->email ?? '') }}"
                  required>
                @include('components.validations.feedback', ['message' => 'email'])
              </div>
            </div>
            <div class="col-sm-6" id="password">
              <label for="profession">パスワード(8文字以上)<span class="text-danger">*</span></label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="profession" placeholder="パスワード"
                value="{{ $errors->has('*') ? old('password'):($user->password ?? '') }}" required>
              @include('components.validations.feedback', ['message' => 'password'])
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">姓<span class="text-danger">*</span></label>
                <input type="text" name="sei" class="form-control @error('sei') is-invalid @enderror" placeholder="山田"
                  value="{{ $errors->has('*') ? old('sei'):($user->sei ?? '') }}" required>
                @include('components.validations.feedback', ['message' => 'sei'])
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">名<span class="text-danger">*</span></label>
                <input type="text" name="mei" class="form-control @error('mei') is-invalid @enderror" placeholder="太郎"
                  value="{{ $errors->has('*') ? old('mei'):($user->mei ?? '') }}" required>
                @include('components.validations.feedback', ['message' => 'mei'])
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">姓(カタカナ)</label>
                <input type="text" name="sei_kana" class="form-control @error('sei_kana') is-invalid @enderror"
                  placeholder="ヤマダ" value="{{ $errors->has('*') ? old('sei_kana'):($user->sei_kana ?? '') }}">
                @include('components.validations.feedback', ['message' => 'sei_kana'])
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">名(カタカナ)</label>
                <input type="text" name="mei_kana" class="form-control @error('mei_kana') is-invalid @enderror"
                  placeholder="タロウ" value="{{ $errors->has('*') ? old('mei_kana'):($user->mei_kana ?? '') }}">
                @include('components.validations.feedback', ['message' => 'mei_kana'])
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>性別<span class="text-danger">*</span></label>
                <div class="row">
                  <div class="col-md-12">
                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                      <option selected="selected" value="">選択してください</option>
                      @foreach($genders as $gender)
                      <option value="{{ $gender->value }}" {{ old('role')==$gender->value || isset($user->gender) &&
                        $user->gender == $gender->value ? 'selected': '' }}>
                        {{ $gender->description }}
                      </option>
                      @endforeach
                    </select>
                    @include('components.validations.feedback', ['message' => 'gender'])
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>生年月日<span class="text-danger">*</span></label>
                <input type="text" name="birth" class="form-control datepicker @error('birth') is-invalid @enderror"
                  value="{{ $errors->has('*') ? old('birth'):($user->birth ?? '') }}" required>
                @include('components.validations.feedback', ['message' => 'birth'])
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-right">
            <button type="submit" id="user-submit" class="btn btn-primary mb-2 mt-5">保存</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>