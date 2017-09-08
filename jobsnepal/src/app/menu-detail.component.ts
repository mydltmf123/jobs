import { Component, Input } from '@angular/core';

import { Menu } from './menu';
@Component({
  selector: 'menu-detail',
  template: `
    <div *ngIf="menu">
      <h2>{{menu.name}} details!</h2>
      <div><label>id: </label>{{menu.id}}</div>
      <div>
        <label>name: </label>
        <input [(ngModel)]="menu.name" placeholder="name"/>
      </div>
    </div>
  `
})
export class MenuDetailComponent {
  @Input() menu: Menu;
}