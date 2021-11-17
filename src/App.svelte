<script>

  import Router from "svelte-spa-router";
  import Home from "./Home.svelte";
  import Registro from "./Registro.svelte";
  import Anuncio from "./Anuncio.svelte";

  const routes = {
    "/": Home,
    "/registro/": Registro,
    "/anuncio/": Anuncio,
  };
</script>

<main>
  <Router {routes} />
</main>

<style>
</style>
