<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [

    'covers' => [
        'create' => [
            '_' => 'Banner festlegen',
            'button' => 'Bild hochladen',
            'info' => 'Das Bild sollte :dimensions groß sein. Hier kannst du es auch ablegen, um es hochzuladen.',
        ],

        'destroy' => [
            '_' => 'Banner entfernen',
            'confirm' => 'Bist du dir sicher, dass du das Banner entfernen willst?',
        ],
    ],

    'email' => [
        'new_reply' => '[osu!] Neue Antwort auf Thread ":title"',
    ],

    'forums' => [
        'topics' => [
            'empty' => 'Keine Threads!',
        ],
    ],

    'pinned_topics' => 'Angepinnte Threads',
    'post' => [
        'confirm_destroy' => 'Beitrag wirklich entfernen?',
        'confirm_restore' => 'Beitrag wirklich wiederherstellen?',
        'edited' => 'Zuletzt von :user an :when bearbeitet, insgesamt :count Mal bearbeitet.',
        'posted_at' => 'erstellt am :when',
        'actions' => [
            'destroy' => 'Beitrag löschen',
            'restore' => 'Beitrag wiederherstellen',
            'edit' => 'Beitrag bearbeiten',
        ],
    ],
    'search' => [
        'go_to_post' => 'Gehe zu Beitrag',
        'post_number_input' => 'Beitragsnummer hier eingeben',
        'total_posts' => 'Insgesamt :posts_count Beiträge',
    ],
    'subforums' => 'Subforen',
    'title' => 'osu!community',
    // sorry for butchering this, but the first zelda doesn't exist in german
    'slogan' => 'es ist gefährlich, alleine zu gehen.',
    'topic' => [
        'create' => [
            'placeholder' => [
                'body' => 'Beitragsinhalt hier eingeben',
                'title' => 'Hier klicken, um den Titel festzulegen',
            ],
            'preview' => 'Vorschau',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => 'Bearbeiten',
            'submit' => 'Erstellen',
        ],
        'go_to_latest' => 'letzten beitrag anschauen',
        'jump' => [
            'enter' => 'hier klicken, um eine beitragsnummer einzugeben',
            'first' => 'zum ersten beitrag',
            'last' => 'zum letzten beitrag',
            'next' => '10 beiträge vor',
            'previous' => '10 beiträge zurück',
        ],
        'latest_post' => ':when von :user',
        'latest_reply_by' => 'letzte antwort von :user',
        'new_topic' => 'Neuen Thread erstellen',
        'post_edit' => [
            'cancel' => 'Abbrechen',
            'post' => 'Speichern',
        ],
        'post_reply' => 'Antworten',
        'reply_box_placeholder' => 'Hier eingeben, um zu antworten',
        'started_by' => 'von :user',
    ],

    'topic_watches' => [
        'index' => [
            'title' => 'Forenabonnements',
            'title_compact' => 'forenabos',
            'title_main' => 'Foren<strong>abonnenements</strong>',

            'box' => [
                'total' => 'Abonnierte Threads',
                'unread' => 'Threads mit ungelesenen Antworten',
            ],
            'info' => [
                'total' => 'Du hast :total Threads abonniert.',
                'unread' => 'Du hast :unread ungelesene Antworten in abonnierten Threads.',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => 'Thread deabonnieren?',
                'title' => 'Deabonnieren',
            ],
        ],
    ],

    'topics' => [
        '_' => 'Threads',

        'actions' => [
            'reply' => 'Antworten',
            'reply_with_quote' => 'Beitrag in der Antwort zitieren',
            'search' => 'Suchen',
        ],

        'create' => [
            'create_poll' => 'Abstimmung erstellen',

            'create_poll_button' => [
                'add' => 'Erstelle eine Abstimmung',
                'remove' => 'Brich die Abstimmungserstellung ab',
            ],

            'poll' => [
                'length' => 'Abstimmung offen für',
                'length_days_prefix' => '',
                'length_days_suffix' => 'Tage',
                'length_info' => 'Nichts eingeben für eine nie endende Abstimmung',
                'max_options' => 'Antworten pro Benutzer',
                'max_options_info' => 'Dies ist die Anzahl an Antworten, die jeder maximal Benutzer wählen kann.',
                'options' => 'Antworten',
                'options_info' => 'Platziere jede Antwort in einer neuen Zeile. Du kannst maximal 10 Antworten eingeben.',
                'title' => 'Question',
                'vote_change' => 'Erlaube Antwortänderungen.',
                'vote_change_info' => 'Wenn aktiv, können Benutzer ihre Antworten ändern.',
            ],
        ],

        'edit_title' => [
            'start' => 'Titel bearbeiten',
        ],

        'index' => [
            'views' => 'Aufrufe',
            'replies' => 'Antworten',
        ],

        'issue_tag_added' => [
            'action-0' => 'Tag "added" entfernen',
            'action-1' => 'Tag "added" hinzufügen',
            'state-0' => 'Tag "added" entfernt',
            'state-1' => 'Tag "added" hinzugefügt',
        ],

        'issue_tag_assigned' => [
            'action-0' => 'Tag "assigned" entfernen',
            'action-1' => 'Tag "assigned" hinzufügen',
            'state-0' => 'Tag "assigned" entfernt',
            'state-1' => 'Tag "assigned" hinzugefügt',
        ],

        'issue_tag_confirmed' => [
            'action-0' => 'Tag "confirmed" entfernen',
            'action-1' => 'Tag "confirmed" hinzufügen',
            'state-0' => 'Tag "confirmed" entfernt',
            'state-1' => 'Tag "confirmed" hinzugefügt',
        ],

        'issue_tag_duplicate' => [
            'action-0' => 'Tag "duplicate" entfernen',
            'action-1' => 'Tag "duplicate" hinzufügen',
            'state-0' => 'Tag "duplicate" entfernt',
            'state-1' => 'Tag "duplicate" hinzugefügt',
        ],

        'issue_tag_invalid' => [
            'action-0' => 'Tag "invalid" entfernen',
            'action-1' => 'Tag "invalid" hinzufügen',
            'state-0' => 'Tag "invalid" entfernt',
            'state-1' => 'Tag "invalid" hinzugefügt',
        ],

        'issue_tag_resolved' => [
            'action-0' => 'Tag "resolved" entfernen',
            'action-1' => 'Tag "resolved" hinzufügen',
            'state-0' => 'Tag "resolved" entfernt',
            'state-1' => 'Tag "resolved" hinzugefügt',
        ],

        'lock' => [
            'is_locked' => 'Dieser Thread ist gesperrt und erlaubt keine weiteren Antworten',
            'lock-0' => 'Thread entsperren',
            'lock-1' => 'Thread sperren',
            'state-0' => 'Thread wurde entsperrt',
            'state-1' => 'Thread wurde gesperrt',
        ],

        'moderate_move' => [
            'title' => 'In ein anderes Forum bewegen',
        ],

        'moderate_pin' => [
            'pin-0' => 'Thread von den angepinnten Threads entfernen',
            'pin-1' => 'Thread anpinnen',
            'pin-2' => 'Thread anpinnen und als Ankündigung markieren',
            'state-0' => 'Thread wurde von den angepinnten Threads entfernt',
            'state-1' => 'Thread wurde angepinnt',
            'state-2' => 'Thread wurde angepinnt und als Ankündigung markiert',
        ],

        'show' => [
            'total_posts' => 'Beiträge insgesamt',
            'deleted-posts' => 'Gelöschte Beiträge',

            'feature_vote' => [
                'current' => 'Aktuelle Priorität: +:count',
                'do' => 'Priorität hinzufügen',

                'user' => [
                    'current' => 'Du hast noch :votes.',
                    'count' => '{0} Keine Stimme|{1} :count Stimme|[2,*] :count Stimmen',
                    'not_enough' => 'Du hast keine Stimmen mehr',
                ],
            ],

            'poll' => [
                'vote' => 'Abstimmung',

                'detail' => [
                    'total' => 'Stimmen insgesamt: :count',
                    'ended' => 'Abstimmung beendet am :time',
                    'end_time' => 'Abstimmung endet am :time',
                ],
            ],
        ],

        'watch' => [
            'state-0' => 'Thread deabonniert',
            'state-1' => 'Thread abonniert',
            'watch-0' => 'Thread deabonnieren',
            'watch-1' => 'Thread abonnieren',
        ],
    ],

];
