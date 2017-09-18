import { NgModule }             from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from './home.component';
import { ResumeComponent } from './resume.component';
import { LoginComponent } from './login.component';
import { BoardComponent } from './board.component';


const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home',  component: HomeComponent },
  { path: 'resume', component: ResumeComponent },
  { path: 'login', component: LoginComponent },
  { path: 'board', component: BoardComponent }
];

@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}

