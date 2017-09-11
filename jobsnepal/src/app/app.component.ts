import { Component } from '@angular/core';

import { Menu } from './menu';

const MENUS: Menu[] = [
  { id: 1, name: '/assets/image/job.jpg', url: 'ab' },
  { id: 2, name: '/assets/image/nepal.jpg', url: 'bc' },
  { id: 3, name: '/assets/image/nepal.jpg', url:  'cd'}
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

  items: Array<any> = []

  constructor() {
    this.items = [
      { name: '/assets/image/job.jpg' },
      { name: '/assets/image/nepal.jpg' },
      { name: '/assets/image/job.jpg' },
    ]
  }

  onSelect(menu: Menu): void {
    this.selectedMenu = menu;
  }
}