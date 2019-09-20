<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          icon="menu"
          aria-label="Menu"
        />

        <q-toolbar-title>
          Pizzaria
        </q-toolbar-title>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      content-class="bg-grey-2"
    >
      <q-list>
        <q-item-label header>MENU</q-item-label>
        <q-item to="/">
          <q-item-section avatar>
            <q-icon name="list" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Pedidos</q-item-label>
          </q-item-section>
        </q-item>
        <q-item to="clientes">
          <q-item-section avatar>
            <q-icon name="supervisor_account" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Clientes</q-item-label>
          </q-item-section>
        </q-item>
        <q-item to="pizzas-sabores">
          <q-item-section avatar>
            <q-icon name="local_pizza" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Sabores de pizza</q-item-label>
          </q-item-section>
        </q-item>
        <q-item to="pizzas-tamanhos">
          <q-item-section avatar>
            <q-icon name="local_pizza" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Tamanhos de pizza</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
export default {
  name: 'MyLayout',

  data () {
    return {
      leftDrawerOpen: false
    }
  }
}
</script>
