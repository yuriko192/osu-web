// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

export default class ReferenceLinkTooltip {
  constructor() {
    $(document).on('mouseover', '.js-reference-link', this.showTooltip);
  }

  private createTooltip = (element: HTMLElement, content: HTMLElement) => {
    $(element).qtip({
      content: {
        text: content,
      },
      hide: {
        delay: 200,
        effect: $(content).fadeTo(110, 0),
        fixed: true,
      },
      position: {
        at: 'top center',
        my: 'bottom center',
        viewport: $(window),
      },
      show: {
        delay: 200,
        effect: $(content).fadeTo(110, 1),
        ready: true,
      },
      style: {
        classes: 'tooltip-default tooltip-default--interactable',
      },
    });
  };

  private showTooltip = (e: JQuery.MouseOverEvent) => {
    if (!(e.currentTarget instanceof HTMLAnchorElement)) return;

    const el = e.currentTarget;
    const targetId = el.getAttribute('href');

    if (targetId == null) return;

    const tooltipContent = document.querySelector(targetId)?.firstElementChild?.cloneNode(true);

    if (!(tooltipContent instanceof HTMLParagraphElement)) return;

    tooltipContent.querySelectorAll('[role="doc-backlink"]').forEach((link) => link.remove());

    this.createTooltip(el, tooltipContent);
  };
}
