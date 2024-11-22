<x-scaffold.template.template>
  <x-scaffold.navbar />
  <section class="about">
    Este é um projeto de teste para a <strong class="investidor-10">Investidor10</strong>.
  </section>
</x-scaffold.template.template>

<style>
  .about {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 2rem;
    background-color: #e4e4e4;
    min-height: 100vh;
    font-size: 1.5rem;
  }

  .about .investidor-10 {
    margin-left: 0.5em;
    text-decoration: underline;
    color: #333;
  }
</style>