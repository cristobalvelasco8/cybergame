import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import { SecureComponent } from './secure/secure.component';
import { DetalleComponent } from './detalle/detalle.component';
import { LoggedoutComponent } from './loggedout/loggedout.component';
import { RegisterComponent } from './register/register.component';
import { Error404Component } from './error404/error404.component';
import { CategoriaComponent } from './categoria/categoria.component';
import { AdminproductosComponent } from './adminproductos/adminproductos.component';
import { ListaDeseosComponent } from './lista-deseos/lista-deseos.component';
import { AdminusuariosComponent } from './adminusuarios/adminusuarios.component';
import { CarritoComponent } from './carrito/carrito.component';
import { ComprasComponent } from './compras/compras.component';
import { DetallepedidoComponent } from './detallepedido/detallepedido.component';
import { SearchComponent } from './search/search.component';

const routes: Routes = [
  { path: 'login', component: LoginComponent },
  { path: 'secure', component: SecureComponent },
  { path: 'loggedout', component: LoggedoutComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'categoria/:nombreCategoria', component: CategoriaComponent },
  { path: 'admin/productos', component: AdminproductosComponent },
  { path: 'admin/usuarios', component: AdminusuariosComponent },
  { path: 'lista-deseos', component: ListaDeseosComponent },
  { path: 'carrito', component: CarritoComponent },
  { path: 'compras', component: ComprasComponent },
  { path: 'compras/detalle/:idPedido', component:  DetallepedidoComponent},
  { path: 'search/:search', component: SearchComponent },
  { path: '', component: HomeComponent },
  { path: ':nombreProducto', component: DetalleComponent},
  {path: '404', component: Error404Component},
  { path: '**', redirectTo: '/404' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }