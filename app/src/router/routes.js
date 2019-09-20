
const routes = [
  {
    path: '/',
    component: () => import('layouts/MyLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Pedidos.vue') },
      { path: 'clientes', component: () => import('pages/Clientes.vue') },
      { path: 'pizzas-sabores', component: () => import('pages/PizzasSabores.vue') },
      { path: 'pizzas-tamanhos', component: () => import('pages/PizzasTamanhos.vue') }
    ]
  }
]

// Always leave this as last one
if (process.env.MODE !== 'ssr') {
  routes.push({
    path: '*',
    component: () => import('pages/Error404.vue')
  })
}

export default routes
