import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AlertModule } from 'ngx-bootstrap';

import { AppComponent }        from './app.component';
import { MenuDetailComponent } from './menu-detail.component';

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    AlertModule.forRoot()
  ],
  declarations: [
    AppComponent,
    MenuDetailComponent
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule { }