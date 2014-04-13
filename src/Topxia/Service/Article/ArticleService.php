<?php
namespace Topxia\Service\Article;

interface ArticleService
{
	public function getArticle($id);

	public function getArticleByAlias($alias);

	public function getArticlesByCategoryId($categoryId);

	public function searchArticles(array $conditions, array $orderBy, $start, $limit);

	public function searchArticleCount($conditions);

	public function createArticle($article);

	public function updateArticle($id, $Article);

	public function updateArticleProperty($id, $property);

	public function trashArticle($id);

	public function deleteArticle($id);

	public function deleteArticlesByIds($ids);
	
    public function publishArticle($id);

	public function isAliasAvaliable($alias);

	public function changeIndexPicture($filePath, $options);
}