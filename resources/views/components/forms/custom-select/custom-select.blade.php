<div class="custom-select">
  <label class="label">{{ $label }}:
    <select name="{{ $name }}" id="{{ $name }}" class="select">
      @foreach ($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
      @endforeach
    </select>
  </label>
</div>

<style>
  .custom-select {
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem;
    border-radius: 20px;
    border: 1px solid black;
  }

  .custom-select > .label {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
  }

  .custom-select > .label > .select {
    width: 100%;
    text-align: center;
  }
</style>