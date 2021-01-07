<div class="form-group">
    <label for="{{ $subject }}">{{ $isisubject }}</label>
    <textarea class="form-control" id="{{ $subject }}" name="{{ $subject }}" rows="3" >{{ old( $subject) }}</textarea>
    @error($subject)
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
