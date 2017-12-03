import { NgModule }             from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from './home.component';
import { ResumeComponent } from './resume.component';
import { LoginComponent } from './login.component';
import { WS_BoardComponent } from './ws_board.component';
import { JS_BoardComponent } from './js_board.component';
import { JoinComponent } from './join.component';
import { WS_PostComponent } from './ws_post.component';
import { JS_PostComponent } from './js_post.component';
import {ViewComponent } from './view.component';


const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home',  component: HomeComponent },
  { path: 'resume', component: ResumeComponent },
  { path: 'login', component: LoginComponent },
  { path: 'ws_board', component: WS_BoardComponent },
  { path: 'js_board', component: JS_BoardComponent },
  { path: 'join', component: JoinComponent },
  { path: 'ws_post', component: WS_PostComponent },
  { path: 'js_board/new', component: JS_PostComponent },
  { path: 'js_board/:id', component: ViewComponent }
  
];

@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}

