import { test, expect } from '@playwright/test';

test('login screen loads and logs in', async ({ page }) => {
    await page.goto('/adminpanel/login');

    await expect(page.locator('text=Welcome Back!')).toBeVisible();

    await page.fill('input[name="email"]', 'admin@site.com');
    await page.fill('input[name="password"]', 'admin');
    await page.click('button[type="submit"]');

    await page.waitForURL('**/adminpanel/dashboards/main');
    await expect(page.locator('text=Get Started')).toBeVisible();
});
