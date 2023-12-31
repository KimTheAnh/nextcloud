/**
 * @copyright Copyright (c) 2019 Julius Härtl <jus@bitgrid.net>
 *
 * @author John Molakvoæ <skjnldsv@protonmail.com>
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license AGPL-3.0-or-later
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

import Vue from 'vue'
import Vuex from 'vuex'
import NcPopoverMenu from '@nextcloud/vue/dist/Components/NcPopoverMenu.js'
import Tooltip from '@nextcloud/vue/dist/Directives/Tooltip.js'
import ClickOutside from 'vue-click-outside'

import View from './views/CollaborationView.vue'

Vue.prototype.t = t
Tooltip.options.defaultHtml = false

// eslint-disable-next-line vue/match-component-file-name
Vue.component('NcPopoverMenu', NcPopoverMenu)
Vue.directive('ClickOutside', ClickOutside)
Vue.directive('Tooltip', Tooltip)
Vue.use(Vuex)

export {
	Vue,
	View,
}
