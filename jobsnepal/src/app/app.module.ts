import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AlertModule } from 'ngx-bootstrap';
import { AppRoutingModule }     from './app-routing.module';

import { AppComponent }        from './app.component';
import { MenuDetailComponent } from './menu-detail.component';
import { HomeComponent } from './home.component';
import { ResumeComponent } from './resume.component';
import {LoginComponent} from './login.component';
import {BoardComponent} from './board.component';

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    AlertModule.forRoot(),
    AppRoutingModule
  ],
  declarations: [
    AppComponent,
    MenuDetailComponent,
    HomeComponent,
    ResumeComponent,
    LoginComponent, 
    BoardComponent
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule { }