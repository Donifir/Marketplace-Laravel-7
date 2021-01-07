<div class="form-group mt-4">
    <label for="{{ $field }}">{{ $judul }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $field }}" name="{{ $field }}" value="{{ old($field) }}">
      @error($field)
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
