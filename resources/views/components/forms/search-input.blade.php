<div class="search-input">
  <input type="text" name="{{$name}}" value="{{$value ?? ''}}"/>
  <img src="/icons/search-icon.svg" alt="Pesquisar" class="icon">
</div>

<style>
  .search-input {
    background-color: white;
    display: flex;
    align-items: center;
    padding: 0.5rem 1rem;
    border-radius: 20px;
  }

  .search-input > input {
    color: black;
    outline: none;
  }

  .search-input > .icon {
    width: 1rem;
    height: 1rem;
    cursor: pointer;
  }
</style>