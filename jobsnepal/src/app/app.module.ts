import { NgModule, ApplicationRef}      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AlertModule } from 'ngx-bootstrap';
import { AppRoutingModule }     from './app-routing.module';
import { HttpModule } from '@angular/http';
import { CommonModule } from '@angular/common';
import { AppComponent }        from './app.component';
import { HomeComponent } from './home.component';
import { ResumeComponent } from './resume.component';
import {LoginComponent} from './login.component';
import {WS_BoardComponent} from './ws_board.component';
import {JS_BoardComponent} from './js_board.component';
import { UserService } from './service/user.service';
import { JoinComponent } from './join.component';
//import { WS_BoardService } from './service/ws_board.service';
import { WS_PostComponent } from './ws_post.component';
import { JS_PostComponent } from './js_post.component';
import { ViewComponent } from './view.component';


@NgModule({
  imports: [
    HttpModule,
    BrowserModule,
    FormsModule,
    AlertModule.forRoot(),
    AppRoutingModule
  ],
  declarations: [
    AppComponent,
    HomeComponent,
    ResumeComponent,
    LoginComponent, 
    WS_BoardComponent,
    JS_BoardComponent,
    JoinComponent,
    WS_PostComponent,
    JS_PostComponent,
    ViewComponent
  ],
  providers: [UserService],
  bootstrap: [ AppComponent ]
})
export class AppModule { }