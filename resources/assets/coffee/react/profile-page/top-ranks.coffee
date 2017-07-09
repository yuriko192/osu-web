###
#    Copyright 2015-2017 ppy Pty. Ltd.
#
#    This file is part of osu!web. osu!web is distributed with the hope of
#    attracting more community contributions to the core ecosystem of osu!.
#
#    osu!web is free software: you can redistribute it and/or modify
#    it under the terms of the Affero GNU General Public License version 3
#    as published by the Free Software Foundation.
#
#    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
#    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
#    See the GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###

{div, h2, h3, ul, li, a, p, pre, span} = ReactDOMFactories
el = React.createElement

class ProfilePage.TopRanks extends React.PureComponent
  constructor: (props) ->
    super props

    @state =
      showingBest: 5
      showingFirst: 5


  render: =>
    div
      className: 'page-extra'
      el ProfilePage.ExtraHeader, name: @props.name, withEdit: @props.withEdit

      div null,
        h3 className: 'page-extra__title page-extra__title--small', osu.trans('users.show.extra.top_ranks.best.title')
        if @props.scoresBest && @props.scoresBest.length
          div className: 'profile-extra-entries',
            @props.scoresBest.map (score, i) =>
              el PlayDetail, key: i, score: score, shown: i <  @state.showingBest
            if @state.showingBest < @props.scoresBest.length
              li className: 'profile-extra-entries__item profile-extra-entries__item--show-more',
                a
                  href: '#'
                  'data-show-more': 'showingBest'
                  onClick: @_showMore
                  osu.trans('common.buttons.show_more')
        else
          p className: 'profile-extra-entries', osu.trans('users.show.extra.top_ranks.empty')

      div null,
        h3 className: 'page-extra__title page-extra__title--small', osu.trans('users.show.extra.top_ranks.first.title')
        if @props.scoresFirst && @props.scoresFirst.length
          div className: 'profile-extra-entries',
            @props.scoresFirst.map (score, i) =>
              el PlayDetail, key: i, score: score, shown: i < @state.showingFirst
            if @state.showingFirst < @props.scoresFirst.length
              li className: 'profile-extra-entries__item profile-extra-entries__item--show-more',
                a
                  href: '#'
                  'data-show-more': 'showingFirst'
                  onClick: @_showMore
                  osu.trans('common.buttons.show_more')
        else
          p className: 'profile-extra-entries', osu.trans('users.show.extra.top_ranks.empty')


  _showMore: (e) =>
      e.preventDefault()

      key = e.currentTarget.dataset.showMore
      @setState "#{key}": (@state[key] + 5)
