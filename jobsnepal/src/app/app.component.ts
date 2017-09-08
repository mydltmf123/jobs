import { Component } from '@angular/core';

import { Menu } from './menu';

const MENUS: Menu[] = [
  { id: 1, name: 'Jobs Search', url: 'ab' },
  { id: 2, name: 'Worker Search', url: 'bc' },
  { id: 3, name: 'Resume Register', url:  'cd'}
];

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Jobs';
  menus = MENUS;
  selectedMenu: Menu;
  image = '/assets/image/job.jpg';

  onSelect(menu: Menu): void {
    this.selectedMenu = menu;
  }
}