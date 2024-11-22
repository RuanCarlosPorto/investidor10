<div class="text-input">
  {{ $label }}: 
  <input type="text" name="{{$name}}" />
</div>

<style>
  .text-input {
    background-color: white;
    display: flex;
    align-items: center;
    padding: 0.5rem;
    border-radius: 20px;
    border: 1px solid black;
  }

  .text-input > input {
    color: black;
    outline: none;
    border: none;
    width: 100%;
    margin-left: 0.5rem;
  }
</style>